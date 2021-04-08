<div class="container delete_course">
    <h2>Are you sure you want to delete the following course?</h2>
    <form action="/courses/destroy" method="post">
    <input type="hidden" name="id" value="<?= $course->id; ?>">
        <div class="form-group">
            <label for="">Name</label>
            <p><?= $course->name ?></p>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <p><?= $course->description ?></p>
        </div>
        <div style="text-align:center;">
             <a href="/" class="btn gray">No</a>
             <input type="submit" class="btn btn-danger" value="Yes! I want to delete this">
        </div>
      
    </form>
   
</div>