<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<style>
    .container {
        width: 1170px;
        border: 3px solid aquamarine;
        padding: 2%;
        border-radius: 25px;
    }
</style>
<body>
    <div class="container mt-5">
        <form  action="update" method="POST"> 
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>      
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" value="<?php echo e(old('firstname', $person->firstname)); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp" value="<?php echo e(old('lastname', $person->lastname)); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo e(old('email', $person->email)); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo e(old('password', $person->password)); ?>">
            </div>
            <label for="exampleInputPassword1" class="form-label">Gender:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo e(old('gender', $person->gender) === 'male' ? 'checked' : ''); ?>  >
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo e(old('gender', $person->gender) === 'female' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact No:</label>
                <input type="number" class="form-control" id="contact_no" name="contact_no" value="<?php echo e(old('contact_no', $person->contact_no)); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\crud_first_laravel\resources\views/edit.blade.php ENDPATH**/ ?>