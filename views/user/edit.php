<?php $title = 'Register';?>
<?php include ROOT.'/views/user/noCatsHeader.php'?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-4 padding-right">
					<div class="signup-form"><!--sign up form-->
						
                        <?php if ($result): ?>
                        <p class='reg'> Saved.</p>
                        <?php else: ?>                        
                        <h2>Data editing:</h2>
                        <?php if(isset($errors) && is_array($errors)): ?>
                            <ul> <?php foreach ($errors as $error): ?>
                                    <li><p class="errors">- <?php echo $error; ?></p></li> 
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;?>
                        <form action="#" method="post">
							<input type="text" name='name' placeholder="Name" value="<?php echo $name; ?>"/>
							<input type="email" name='email' placeholder="Email Address" value="<?php echo $email; ?>"/>
							<input type="password" name='password' placeholder="Password"/>
							<input type="submit" name='submit' class="btn btn-default" value='edit'/>
						</form>
                        <?php endif;?>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php include ROOT.'/views/site/footer.php'?>