

<?php $__env->startSection('title'); ?>
    <h1 class="mb-8 text-2xl font-bold">
    <?php if(isset($task)): ?>
        Edit Task
    <?php else: ?>    
        Input a new task
    <?php endif; ?>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(isset($task)? route('tasks.update', ['task' => $task->id]) : route('tasks.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php if(isset($task)): ?>
            <?php echo method_field('put'); ?>
        <?php endif; ?>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?php echo e($task->title ?? old('title')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-700' => $errors->has('title')]); ?>"/>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-700' => $errors->has('description')]); ?>"><?php echo e($task->description ?? old('description')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-700' => $errors->has('long_description')]); ?>"><?php echo e(isset($task)? $task->long_description : old('long_description')); ?></textarea>
            <?php $__errorArgs = ['long_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="flex gap-2 items-center">
            <button type="submit" class="btn">
                <?php if(isset($task)): ?>
                Edit task
                <?php else: ?>    
                Save Task
                <?php endif; ?>
            </button>
            <?php if(isset($task)): ?>
                <a href="<?php echo e(route('tasks.show', ['task' => $task])); ?>" class="link">Cancel</a>
            <?php else: ?>
                <a href="<?php echo e(route('tasks.index')); ?>" class="link">Cancel</a>
            <?php endif; ?>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ngkak\xampp\htdocs\laravel_projects\task-list\resources\views/form.blade.php ENDPATH**/ ?>