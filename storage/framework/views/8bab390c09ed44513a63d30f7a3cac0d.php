<?php $__env->startSection('title'); ?>
    <h1 class="mb-8 text-3xl font-bold">Welcome to Task list Program</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <nav class="mb-8">
        <a href="<?php echo e(route('tasks.create')); ?>" class="link">Add Task</a>
    </nav>

    <?php if(count($tasks)): ?>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="mb-4"><a href="<?php echo e(route('tasks.show', ['task'=>$task->id])); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['text-xl', 'text-gray-700', 'line-through' => $task->completed]); ?>"><?php echo e($task->title); ?></a></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <nav class="mt-8">
            <?php echo e($tasks->links()); ?>

        </nav>
    <?php else: ?>
        <p>There is no task!</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ngkak\xampp\htdocs\laravel_projects\task-list\resources\views/index.blade.php ENDPATH**/ ?>