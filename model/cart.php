<?php
    function viewcart($del){
        global $img_path;
        $tong =0;
        $i=0;
        if($del==1){
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="XÓA"></a></td>';
            $xoasp_th = '<th>THAO TÁC</th>';
            $xoasp_td2 ='<td></td>' ;
        }else{
            $xoasp_th='';
            $xoasp_td='';
            $xoasp_td2='';
        }
        echo'<tr>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                '.$xoasp_th.'
            </tr>';

        foreach(($_SESSION['mycart']) as $cart){
            $hinh = $img_path.$cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong +=$ttien;
            if($del==1){
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="XÓA"></a></td>';
                $xoasp_th = '<th>THAO TÁC</th>';
                $xoasp_td2 ='<td></td>' ;
            }else{
                $xoasp_th='';
                $xoasp_td='';
                $xoasp_td2='';
            }
            
            echo '
                <tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart[1].'</td>
                    <td>$'.$cart[3].'</td>
                    <td>'.$cart[4].'</td>
                    <td>$'.$ttien.'</td>
                    '.$xoasp_td.'
                </tr>';
            $i+=1;
        }   
        echo'<tr>
                <td colspan="4"><strong>TỔNG ĐƠN HÀNG</strong></td>
                <td>$'.$tong.'</td>
                '.$xoasp_td2.';
            </tr>';
    }

    function bill_chi_tiet($listbill){
        global $img_path;
        $tong =0;
        $i=0;

        echo'<tr>
                <th>HÌNH</th>
                <th>SẢN PHẨM</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
            </tr>';

        foreach($listbill as $cart){
            $hinh = $img_path.$cart['img'];
            $tong +=$cart['thanhtien'];
            
            echo '
                <tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart['name'].'</td>
                    <td>$'.$cart['price'].'</td>
                    <td>'.$cart['soluong'].'</td>
                    <td>'.$cart['thanhtien'].'</td>
                </tr>';
            $i+=1;
        }   
        echo'<tr>
                <td colspan="4"><strong>TỔNG ĐƠN HÀNG</strong></td>
                <td>$'.$tong.'</td>
            </tr>';
    }

    function tongdonhang(){
        $tong=0;
        foreach(($_SESSION['mycart']) as $cart){
            $ttien = $cart[3] * $cart[4];
            $tong +=$ttien;
        }
        return $tong;
    }


    function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }       
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql = "SELECT * FROM bill WHERE id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function loadall_cart_count($idbill){
        $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
        $sp = pdo_query($sql);
        return sizeof($sp);
    }

    function loadall_bill($kyw="",$iduser){
        $sql="SELECT * FROM bill WHERE 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($kyw!= "") $sql.=" AND id like '%" .$kyw."%'";
        $sql.=" order by id desc";
        $sp = pdo_query($sql);
        return $sp;
    }

    function get_ttdh($n){
        switch($n){
        case '0':
        $tt='Đơn hàng mới';
        break;
        case '1':
        $tt='Đang xử lý';
        break;
        case '2':
        $tt='Đang giao hàng';
        break;
        case '3':
        $tt='Hoàn tất';
        break;

        default:
        $tt= 'Đơn hàng mới';
        break;
    }
    return $tt;
}
?>