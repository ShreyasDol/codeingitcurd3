<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document  </title>
</head>
<body>


&nbsp;
<div class="container">

    <?php
    if($this->session->flashdata('success_msg')){

        ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success_msg'); ?>
        </div>
        <?php
    }
    ?>

<a href="<?php echo base_url('blog/add'); ?>"  class="btn btn-success btn-lg btn-block" >ADD NEW USER</a>
    <br/>
 <table class="table table-hover success  table-responsive ">
    <thead>
       <tr>
            <th>#</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Mobile</th>
            <th>Action</th>
       </tr>
    </thead>
     <tbody>

     <?php
         if($blogs){
             foreach ($blogs as $blog){

           ?>
     <tr>
         <td> <?php echo $blog->id; ?></td>
         <td> <?php echo $blog->t_name; ?></td>
         <td> <?php echo $blog->t_email; ?></td>
         <td> <?php echo $blog->t_mobile; ?> </td>
         <td>
            <a href="<?php echo base_url('blog/edit/' .$blog->id); ?>" class="btn btn-info btn-md">&nbsp; EDIT &nbsp;</a>
             <a href="<?php echo base_url('blog/delete/' .$blog->id); ?>" class="btn btn-danger btn-md"
             onclick="return confirm('Do You Want to Delete this record ?');">DELETE</a>
         </td>
     </tr>

     <?php
             }
         }
     ?>
     </tbody>

 </table>

</div>
</body>
</html>