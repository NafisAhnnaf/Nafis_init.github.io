<!doctype html>
<html lang="en">
  <head>
    <title>NDCC Membership form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="./imgs/logo_bgless.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <div class="full-body py-5 px-3">
        <div class="col-md-4  mx-auto py-5 px-2 grp">
            <div class="container mb-4 text-center">
                <div class="img mx-auto pb-3">
                <img src="./imgs/2359095.png" alt="">
                </div>
                <h2 class="py-2">HealthifyME</h2>
                <h4 class="py-2">Join the Healthy family. <br></h4>
                <p>Fill up the form below with Authentic Information.</p>
            </div>
        </div>    
        <div class="col-md-4 mx-auto my-5 p-5 grp">
            <form name="form" action="" method="POST" onsubmit="confirmSub()" enctype="multipart/form-data">   
                <div class="mb-3 textInput">
                    <label for="exampleInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInput1" name="Name" placeholder="Full Name" aria-describedby="emailHelp" required>
                </div>       
                <div class="mb-3 textInput">
                    <label for="exampleInput1" class="form-label">Blood Group</label>
                    <input type="text" class="form-control" id="exampleInput2" name="Group" placeholder="eg. B+" aria-describedby="emailHelp" required>
                </div>        
                <div class="mb-3 textInput">
                    <label for="exampleInput1" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="exampleInput1" name="Phone" placeholder="01xxxxxxxxx" aria-describedby="emailHelp" required>
                </div>    
                <div class="mb-3 textInput">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="eg. abc@gmail.com" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text note py-1">We'll never share your email with anyone else.</div>
                </div>
           
            <div class="skills mt-5  mb-3">
              <label for="flexCheck">Terms & Condition</label>
              <div class="mb-3 ml-2">
                
                <div class="form-check py-1 term checkbox-xl">
                  <input class="form-check-input bigCheck" type="checkbox" value="Voice" id="flexCheck" name="ckb[]" onclick='chkcontrol(0)';>
                  <label class="form-check-label pl-1" for="flexCheckDefault">
                    I have read and agree to the <b><u><a href="#">Terms & Conditions.</a></u></b>
                  </label>
                </div>
              </div>
            </div>
            <div class="Sumbit text-center mx-auto pt-4">
              <button  type="submit" name="submit" class="btn btn-info btn-lg px-5 py-2">Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    <footer class="">
      <div class="container footer col-sm-12">
        <div class="row text-center p-4">
          <div class="col"><h5>Copyright <i class="fa-regular fa-copyright"></i> 2023 Nafis NDC-12316119</h5></div>
        </div>
      </div>
    </footer>
    
    <script type="text/javascript">
          function confirmSub() {
            alert("Your Response was recorded!");
          }
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>