
	<!-- Header Area Starts -->
	<header class="bg-slate-300/[.5] fixed font-cursive-merie left-0 lg:-translate-x-1/2 lg:left-1/2 lg:mx-auto lg:transform lg:translate-y-0 lg:w-4/5 ml-4 px-0 py-1 rounded shadow-sm top-0 w-56 xl:w-11/12 z-[20]" style="background-color: rgba(246,224,1,0.69); color:#000'">
	  <div class="mx-4 lg:flex lg:items-center">
	    <div class="flex items-center justify-between">
	      <div class="lg:shrink-0">
	        <a href="<?php echo e(route('index')); ?>">
                    <?php if(isset($settings->logo)): ?>

                <img src=" <?php echo e($settings->getLogo($settings->logo)); ?>" alt="logo" class="h-auto lg:m-0 lg:p-2 m-auto max-w-[200px] min-w-[90px] px-2 py-2" />
                     <?php else: ?>
                        <div>No logo uploaded</div>
                    <?php endif; ?>


            </a>
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer transition ease-in-out duration-75 open">
	      	<?php $__currentLoopData = [1, 2, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0"></span>
			    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer relative transition ease-in-out duration-75 close hidden">
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0 absolute top-3.5 right-4 transform rotate-45"></span>
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0  absolute top-3.5 right-4 transform -rotate-45"></span>
	      </div>
	    </div>

	    <div class="lg:flex-1 nav-collapse hidden lg:block" >
	      <ul class="pb-2 lg:pb-0 lg:flex lg:flex-wrap lg:items-center lg:justify-end">
	      	<?php $__currentLoopData = $navdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					     <li class="font-bold lg:px-4 lg:py-2 lg:text-left p-2.5 text-[12.5px] text-right uppercase transition ease-in-out duration-300 hover:scale-105">
					     	<a href=<?php echo e($data['href']); ?>><?php echo e($data['text']); ?></a>
					     </li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<?php if(Route::has('login')): ?>
				 <?php if(auth()->guard()->check()): ?>
					<div class="m-2 flex justify-end lg:mx-4 lg:block" style="display: none">
						<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'right','width' => '48']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
							 <?php $__env->slot('trigger', null, []); ?> 
								<?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
								<button
									class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
								>
									<img
										class="h-8 w-8 rounded-full object-cover"
										src="<?php echo e(Auth::user()->profile_photo_url); ?>"
										alt="<?php echo e(Auth::user()->name); ?>"
									/>
								</button>
								<?php else: ?>
								<span class="inline-flex rounded-md">
									<button
										type="button"
										class="bg-transparent border border-transparent duration-300 ease-in-out focus:outline-none font-bold font-medium hover:scale-105 inline-flex items-center lg:text-left text-[12.5px] text-gray-900 text-right transition uppercase"
									>
										<?php echo e(Auth::user()->name); ?>


										<svg
											class="ml-2 -mr-0.5 h-4 w-4"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 20 20"
											fill="currentColor"
										>
											<path
												fill-rule="evenodd"
												d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
												clip-rule="evenodd"
											/>
										</svg>
									</button>
								</span>
								<?php endif; ?>
							 <?php $__env->endSlot(); ?>

							 <?php $__env->slot('content', null, []); ?> 
								<!-- Account Management -->
								<div class="block px-4 py-2 text-xs text-gray-400 text-right">
									<?php echo e(__('Manage Account')); ?>

								</div>

								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right','href' => ''.e(route('profile.show')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right','href' => ''.e(route('profile.show')).'']); ?>
									<?php echo e(__('Profile')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

								<?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right','href' => ''.e(route('api-tokens.index')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right','href' => ''.e(route('api-tokens.index')).'']); ?>
									<?php echo e(__('API Tokens')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
								<?php endif; ?>

								<div class="border-t border-gray-100"></div>

								<!-- Authentication -->
								<form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
									<?php echo csrf_field(); ?>

									<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right','href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right','href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']); ?>
										<?php echo e(__('Log Out')); ?>

									 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
								</form>
								<div class="border-t border-gray-100"></div>
								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('admin.index')).'','target' => '_blank']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('admin.index')).'','target' => '_blank']); ?>
									Dashboard
								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
					</div>
				 <?php else: ?>
					<div class="m-2 flex justify-end lg:mx-4 lg:block" style="display: none">
						<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'right','width' => '48']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
							 <?php $__env->slot('trigger', null, []); ?> 
								<span class="inline-flex rounded-md">
									<button
										type="button"
										class="bg-transparent border border-transparent duration-300 ease-in-out focus:outline-none font-bold font-medium hover:scale-105 inline-flex items-center lg:text-left text-[12.5px] text-gray-900 text-right transition uppercase"
									>
										User
									</button>
								</span>
							 <?php $__env->endSlot(); ?>

							 <?php $__env->slot('content', null, []); ?> 

								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('login')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('login')).'']); ?>
									Login
								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

								<?php if(Route::has('register')): ?>
								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('register')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('register')).'']); ?>
									Register
								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
								<?php endif; ?>
								<div class="border-t border-gray-100"></div>
								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('admin.index')).'','target' => '_blank']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right p-2.5 text-sm font-bold text-slate-800 uppercase text-[12.5px] text-gray-500 text-right','href' => ''.e(route('admin.index')).'','target' => '_blank']); ?>
									Dashboard
								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
							 <?php $__env->endSlot(); ?>
						 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
					</div>
				<?php endif; ?> <?php endif; ?>

	      </ul>
	    </div>
	  </div>
	</header>
	<!-- Header Area End -->


<?php if(session('msg')): ?>
    <div id="alert-box" class="absolute inset-0 flex items-center justify-center">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-5 rounded relative" role="alert">
            <span class="block sm:inline"><?php echo e(session('msg')); ?></span>
            <span class="absolute top-0 right-0 px-4 px-3">
                <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.415l2.935-2.934-2.935-2.935a1 1 0 111.414-1.414l2.935 2.935 2.934-2.935a1 1 0 011.415 1.414L11.414 10l2.935 2.934a1 1 0 010 1.415z"/></svg>
            </span>
        </div>
    </div>
    <script>
        document.getElementById('close-alert').addEventListener('click', function() {
            document.getElementById('alert-box').style.display = 'none';
        });
    </script>
<?php endif; ?>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/home/partials/header.blade.php ENDPATH**/ ?>