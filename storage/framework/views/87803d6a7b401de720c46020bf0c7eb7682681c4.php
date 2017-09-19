<?php $__env->startSection('title', 'Add a Booking'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Car</h2>
        </div>
    </div>
</div>
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<?php echo Form::open(['action' => 'BookingController@store']); ?>


<div class="form-group">
    <?php echo Form::Label('car', 'Car:'); ?>

    <select class="form-control" name="item_id">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($car->id); ?>"><?php echo e($car->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <?php echo Form::label('name', 'Name'); ?>

    <?php echo Form::text('name', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email', 'Email'); ?>

    <?php echo Form::text('email', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('address_line_1', 'Address'); ?>

    <?php echo Form::text('address_line_1', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::text('address_line_2', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('suburb', 'Suburb'); ?>

    <?php echo Form::text('suburb', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('state', 'State'); ?>

    <?php echo Form::text('state', '', ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('country', 'Country'); ?>

    <?php echo Form::text('country', '', ['class' => 'form-control']); ?>

</div>

<button class="btn btn-success" type="submit">Book Now!</button>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>