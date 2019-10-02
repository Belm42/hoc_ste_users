<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/nav.php'; ?>
<div class="container fluid">
    <div class="row">
        <h1>Contact</h1>
    </div>
    <div class="row">
        <form action="contact_process.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
<?php require_once 'templates/footer.php'; ?>