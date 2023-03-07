<?php 

require("alert.php");
require("db_config.php");
adminLogin();

if(isset($_POST['add_portfolio'])){
    $frm_data = filteration($_POST);

    $img_r=uploadImage($_FILES['picture'],PORTFOLIO_FOLDER);

    if($img_r =='inv_img'){
        echo $img_r;
    }else if($img_r =='inv_size'){
        echo $img_r;
    }else if($img_r =='upd_failed'){
        echo $img_r;
    }else{
        $q = "INSERT INTO `portfolio_add` (`name`, `picture`) VALUES (?,?)";
        $values = [$frm_data['name'],$img_r];
        $res = insert($q,$values,'ss');
        echo $res;
    }
}

if(isset($_POST['get_portfolio'])){
    $res = selectAll('portfolio_add');

    while($row= mysqli_fetch_assoc($res)){
        $path = PORTFOLIO_IMG_PATH;
        echo <<<data

            <div class="col-md-2 mb-3">
            <div class="card text-dark">
            <img src="$path$row[picture]" class="card-img" alt="">
            <div class="card-img-overlay text-end">
            <button type="button" onclick ="remove_portfolio($row[sr_no])" class="btn btn-danger btn-sm shadow-none"><i class="bi bi-trash"></i> Delete</button>
            </div>
            <p class="card-text text-center">$row[name]</p>
            </div>
        </div>

        data;
    }
}

if(isset($_POST['remove_portfolio'])){
    $frm_data = filteration($_POST);
    $values = [$frm_data['remove_portfolio']];

    $pre_q = "SELECT * FROM `portfolio_add` WHERE `sr_no`=?";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['picture'],PORTFOLIO_FOLDER)){
        $q="DELETE FROM `portfolio_add` WHERE `sr_no`=?";
        $res = delete($q,$values,'i');
        echo $res;
    }else{
        echo 0;
    }
}


?>