<div class="row align-items-center">
    <div class="col-12 text-center">
        <form method="get">
            <button class="btn btn-outline-success" name="page" value="homePage">Home Page</button>
            <button class="btn btn-outline-info" name="page" value="form">Add a message</button>
        </form>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-12 text-center">
        <h5>Your message was successfully saved!</h5>
    </div>
    <div class="col-md-4">
        <p> <em>First Name : </em> <?php echo $post->getName(); ?></p>
    </div>
    <div class="col-md-4">
        <p><em>Last Name : </em> <?php echo $post->getLastName(); ?></p>
    </div>
    <div class="col-md-4">
        <p><em>Email : </em> <?php echo $post->getEmail(); ?></p>
    </div>
    <div class="col-md-4">
        <p><em>Date : </em> <?php echo $post->getDate(); ?></p>
    </div>
    <div class="col-md-8">
        <p><em>Message : </em> <?php echo $post->getMessage(); ?></p>
    </div>
</div>
