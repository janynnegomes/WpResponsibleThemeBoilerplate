<div id="templatecomentarios">

    <?php if ( comments_open() ): ?> 

    	<div id="respond">

    	<?php if ( $user_ID ) : ?>

            <div id="boxcomentar" class="comentar_loggedin">
            	<div class="comment-author vcard">
                	<span><?php echo get_avatar( $user_ID, '120');?></span>
                	<span><?php echo $user_identity; ?></span>
            </div>

		<?php else: ?>

			<div id="boxcomentar">

		<?php endif; ?>


		<?php if ( !$user_ID ) : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="formloggedout">

				<fieldset>

					<h3>Deixe sua mensagem</h3>

					<span class="msgvalidacao" id="validacaologgedout"></span>

					<div class="userloggedout">
						<span>
							<label for="author">Nome <span>*</span></label>
							<input type="text" required name="author" id="author" value="<?php echo $comment_author; ?>" />
						</span>

						<span>
							<label for="email">Email <span>*</span></label>
							<input type="email" required name="email" id="email" value="<?php echo $comment_author_email; ?>" />
						</span>

						<span>
							<label for="url">Website</label>
							<input  type="url" name="url" id="url" value="<?php echo $comment_author_url;?>"/>
						</span>

						<span>
							<label for="comment">Mensagem <span>*</span></label>
							<textarea name="comment" id="comment" class="commenttext" rows="" cols=""></textarea>
						</span>

						<input type="submit" class="commentsubmit" value="Enviar" />

						<?php comment_id_fields(); ?>

						<?php do_action('comment_form', $post->ID); ?>
					</div>

				</fieldset>
			</form>

		<?php else: ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="formloggedin">

				<fieldset>

					<div class="userloggedin">
						<textarea name="comment" id="comment" class="commenttext" rows="" cols="" placeholder="Mensagem"></textarea>

						<span class="msgvalidacao" id="validacaologgedin"></span>
						<input type="submit" class="commentsubmit" value="Enviar Comentário" />

						<?php comment_id_fields(); ?>

						<?php do_action('comment_form', $post->ID); ?>
					</div>

				</fieldset>

			</form>

		<?php endif; ?>

		</div>

		<p class="cancel"><?php cancel_comment_reply_link('Cancelar Resposta'); ?></p>

	</div>

	<?php else : ?>

		<!-- <h3>Os comentários estão fechados.</h3> -->

	<?php endif; ?>

	<?php $qtdecommentarios = count($comments); ?>

	<?php if($qtdecommentarios > 0): ?>

		<h3><?php echo $qtdecommentarios.' comentários'; ?></h3>

	<?php endif; ?>


	<div id="comments">  

		<?php if ( have_comments() ) : ?>

		<?php $ping_count = $comment_count = 0; ?>

		<ul>
			<?php
			foreach ( $comments as $comment ){

			$qdte = get_comment_type($comment->comment_ID) == "comment" ? ++$comment_count : ++$ping_count;

			$tipo = get_comment_type($comment->comment_ID);

			custom_comments($comment, array('type'=> $tipo), null);

			}?>
		</ul> 

		<?php endif; ?>

	</div>

</div>