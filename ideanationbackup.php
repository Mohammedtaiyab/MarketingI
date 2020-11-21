<?php
require('admin/connection.inc.php');
if(isset($_POST["submit"])){
  $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['contact'];
    $company=$_POST['company'];
    $price=$_POST['price'];
    $topic=$_POST['topic'];
    $idea=$_POST['idea'];

mysqli_query($con,"insert into ideas (Name, Email, Contact,Company, Topic, Description,Amount)values('$name','$email', '$phone','$company',' $topic','$idea', '$price')");
}
$sql="select * from ideas where Status='1'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);

require('headermain.php');
?>
  <!-- Why Choose Us -->
      <section id="why-choose" class="why-choose section">
        <div class="container-fluid fix">
          <div class="row fix">

             <div class="col-md-3 col-sm-12 col-xs-12 fix">
              <div class="why-video">
                <!-- Video Animation -->
                <div class="promo-video">
                  <div class="waves-block">
                    <div class="waves wave-1"></div>
                    <div class="waves wave-2"></div>
                    <div class="waves wave-3"></div>
                  </div>
                </div>
                <!--/ End Video Animation -->
                <!-- Promo Video -->
              
                <!--/ End Promo Video -->
              </div>
            </div>          
          
            <div class="col-md-4 col-sm-12 col-xs-12 fix">
              <div class="choose-main">
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-lightbulb-o"></i>
                  <h4>Got A Business Idea</h4>
                 <p>MarketingOJO helps you to build the business from the ideas you have if it has got any potential. Build your business with the idea you have got or just scroll down for more potential business ideas.</p>
                </div>
                <!-- End Single Choose -->  
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-support"></i>
                  <h4>Sell Your Business Idea</h4>
                  <p>Are you smart enough to think of an idea that can bring change? If yes, share it with the nation and get paid for it with just a click</p>
                </div>
                <!-- End Single Choose -->
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-optin-monster"></i>
                  <h4>Buy A Business Idea</h4>
                  <p>Looking for a unique idea to start a business? Scroll down and grab the idea before it slips from your hand.</p>
                </div>
                <!-- End Single Choose -->  
              </div>
            </div>     
              <div class="col-md-5 col-sm-12 col-xs-12 fix">
              <div class="working-process">
                <h2>Share Your Business Ideas With The Nation!</h2>
                <p>No one can steal your idea but you should give it away to those who need it, of course for a price you like. You're just a click away from bringing the change.</p>
               <!--  <a href="" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Share!</a> -->
                <button  id="btnOpenForm">Share!</button>
              </div>
            </div> 
           </div>
        </div>
      </section>  


    <!-- Start Services -->
      <section id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-title">
                <h1>IDEANATION</h1>
                <?php
                  if($rowcount==0){
                    ?>
                      <p>No Ideas Available At the Moment</p>
                          </div>
                          </div>
                           </div>
                      <?php 
                    }else{
                    ?>
              </div>
            </div>
          </div>

                <div class="row">
                    <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){?>
                <div class="col-md-4">
                  <div class="card">
                    <img src="images/ideaLogo.png" style="opacity: .3">
    <!--     <img src="https://picsum.photos/200/300" alt="Idea" style="opacity: .8"> -->
        <div class="con-text">
            <h2><?php echo $row['Topic']?></h2>
            <p>
                <?php echo $row['Description']?>
                
            <button id="info">Rs.<?php echo $row['Amount']?>/-</button>
            </p>
           <div class="contactinfo">
              <p>Contact</p>
           <h5><?php echo $row['Name']?></h5>
            <p>
                <?php echo $row['Email']?>
                </p>
        </div>
        </div>
    </div>
                </div> 
                    <?php $i++; } }?>
                </div>
          
           
        </div>
      </section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <h1>IDEANATION</h1>
    <p>To Share Your Idea. Please complete this form.</p>
    <form action="ideanation.php" class="formm" method="POST">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" required="required"/>
      </div>
      <div class="form-group">
        <label for="">Company Name</label>
        <input class="form-control" name="company" type="text" required="required"/>
      </div>
      <div class="form-group">
        <label for="">E-Mail Address</label>
        <input class="form-control" name="email" type="email" required="required"/>
      </div>
      <div class="form-group">
        <label for="">Phone Number</label>
        <input class="form-control" name="contact" type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required"/>
      </div>
       <div class="form-group">
        <label for="">Idea Topic</label>
        <input class="form-control" name="topic" type="text"  required="required" />
      </div>
    
      <div class="form-group">
        <label for="">Price</label>
        <input class="form-control" name="price" type="text" placeholder="₹"  required="required"/>
      </div>
        <div class="form-group" style="width: 96%">
        <label for="">Brief Your Idea</label>
        <textarea  class="form-control" name="idea" rows="2" placeholder="Describe Your Idea in few words..."  required="required"></textarea>
      </div>
      <button type="submit" name="submit" class="btn1">Submit</button>
    </form>
  </div>
</div>
<?php 
require('footer.php');
?>