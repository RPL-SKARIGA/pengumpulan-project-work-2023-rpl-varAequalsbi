<?php
// include '../../Connection/koneksi.php';
function modal($index)
{
    $conn = koneksi();
    $query = 'SELECT path FROM arte';
    $result = $conn->query($query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
      .selected{
        border: 2px solid #007bff; 
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
    </style>
</head>
<body>

<!-- <img src="../images/Hydrangeas.jpg" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 100px; height: 100px;" id="imgbutton<?php echo $index; ?>"> -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $index; ?>">
  pick an arte
</button>

<div class="modal fade" id="exampleModal<?php echo $index; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">israel babi</h1> -->
      <input type="checkbox" name="" id="twoarte" value=""><span style="color: red;">_use two arte</span>

        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
      for ($i = 0; $i < $result->num_rows; ++$i) {
          $path = $result->fetch_assoc()['path'];
          ?>
      <img src="../../images/arte/<?php echo $path; ?>" alt="<?php echo $i + 1; ?>" style="width: 50px; height: 50px;" onclick="selectedimg<?php echo $index; ?>(this, event)" class="images img-thumbnail" id="image<?php echo $i; ?>">
      <?php
      }
    ?>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">dismiss</button>
        <input type="hidden" name="id<?php echo $index; ?>" id="inptid<?php echo $index; ?>">
        <button type="button" class="btn btn-primary" id="saveChangesButton" onclick="changeimg<?php echo $index; ?>()" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
<script>
    function selectedimg<?php echo $index; ?>(img, event) 
    {
      const images = document.querySelectorAll('.images');
      const check = document.getElementById('twoarte').checked;
      images.forEach(image => {
          image.classList.remove('selected');
      });

      img.classList.add('selected');

      var inptid = document.getElementById('inptid<?php echo $index; ?>');
      inptid.value = event.target.alt 
    }
    function changeimg<?php echo $index; ?>(){
    const inptid = document.getElementById('inptid<?php echo $index; ?>').value
    fetch(`./getnames.php?id=${inptid}`).then(res => {
      console.log(res)
      
      res.json().then(function(hasil) {
      // document.getElementById('imgbutton<?php echo $index; ?>').src = `../../images/arte/${hasil}`
      console.log(hasil);
      const uploadimg = document.getElementById('imgArte<?php echo $index; ?>').src = `../../images/arte/${hasil}`;
    })})
    
    document.getElementById('inptarte<?php echo $index; ?>').value = inptid

    console.log(document.getElementById('inptarte<?php echo $index; ?>'))
    }
</script>
</body>
</html>
<?php } ?>