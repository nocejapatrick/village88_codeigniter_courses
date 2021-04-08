<div class="container">
    <h2>Add a new course</h2>
    <form action="<?= base_url().'courses/add';?>" method="post">
        <div class="form-group">
            <label for="">Name: </label>
            <input type="text" class="form-control <?= ($this->session->flashdata('name_error')) ? "error" : "" ?>" placeholder="<?= $this->session->flashdata('name_error') ?>" name="name">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="50" rows="10"></textarea>
        </div>
        <?php if($this->session->flashdata('success')){ ?>
        <div class="form-group">
            <label for=""></label>
            <span class="success"><?= $this->session->flashdata('success') ?></span>
        </div>
        <?php }?>
        <div class="form-group">
            <label for=""></label>
            <input type="submit" class="btn" value="Add">
        </div>
     
    </form>

    <h2 class="mt-40">Courses</h2>
    <table>
        <thead>
            <tr>
                <td>Course Name</td>
                <td>Description</td>
                <td>Date Added</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
           <?php foreach($courses as $course){ ?>
                <tr>
                    <td><?= $course->name ?></td>
                    <td><?= $course->description ?></td>
                    <td><?= date("F jS Y g:i a",strtotime($course->created_at)) ?></td>
                    <td><a href="/courses/destroy/<?= $course->id ?>">Remove</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>