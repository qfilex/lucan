<!DOCTYPE html>

<?php  include 'header.php'; ?>

<style>
#insert{

margin-bottom: 15px;
}
.form-control{

    width: 30%;
}
.panel{
    width: 50%;
}
</style>
        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>


    <div class="wrapper">


    <div class="container">
    <center>
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Adauga minute internationale</h3>
  </div>
  <div class="panel-body">
    <form action='ams.php' method='post' id='myform' >
    <p>
    <input type='text' name='id' placeholder='user id' id='id' />
    </p>

    <p>
    <input type='text' name='minute' placeholder='Minute' id='minute' />
    </p>
            
    <button id='insert' class="btn btn-primary">Add</button>
    
    <p id='result'></p>
    </form>
    </div>
</div>
</center>
</div>
</div>


    <script type="text/javascript">

$('#myform').submit(function(){
    return false;
});

$('#insert').click(function(){
    $.post(     
        $('#myform').attr('action'),
        $('#myform :input').serializeArray(),
        function(result){
            $('#result').html(result);
        }
    );
});
    </script>
<?php  include 'footer.php'; ?>
</html>