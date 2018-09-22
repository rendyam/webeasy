<?php
    $sql = mysql_query("
                SELECT      
                    *
                FROM
                    user
            ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
?>

<h2 class="sub-header">Edit User</h2>

<form name="edit" method="post" action="?tampil=user_editproses" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
    
    <div class="form-group">
        <label class="label-control col-md-2">Username</label>
        <div class="col-md-4">
            <input type="text" name="username" value="<?php echo $data['username'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Ganti Password</label>
        <div class="col-md-4">
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Ulang Password</label>
        <div class="col-md-4">
            <input type="password" name="password_ulang" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Ubah" class="btn btn-primary">
        </div>
    </div>
</form>