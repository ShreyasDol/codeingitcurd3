<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document add New user</title>
</head>
<body>

<div class="container">
    <div class="col-md-3">
    <a href="<?php echo base_url('blog/index'); ?>"  class="btn  btn-warning btn-lg btn-block" >BACK</a>
    </div>
    <div class="col-md-9">
     <form method="post" action="<?php echo base_url('blog/submit'); ?>">
        <div class="form-group">
            <label class="text-primary " for="exampleInputEmail1"> Name :</label>
            <input type="text" class="form-control" name="t_name" id="exampleInputEmail1" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label class="text-primary " for="exampleInputPassword1">E-mail :</label>
            <input type="text" class="form-control" name="t_email" id="exampleInputPassword1" placeholder="Enter Your Email Id">
        </div>
        <div class="form-group">
            <label class="text-primary " for="exampleInputPassword1"> Mobile No.:</label>
            <input type="text" class="form-control" name="t_mobile" id="exampleInputPassword1" placeholder=" Enter Your Mobile Number">
        </div>
        <div class="form-group">
            <label class="text-primary " for="exampleInputPassword1">Message :</label>

            <textarea type="text" class="form-control" name="t_message" id="exampleInputPassword1"
                      placeholder="Enter Your Message" rows="3"></textarea>
        </div>


        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
     </form>
    </div>
</div>
</body>
</html>