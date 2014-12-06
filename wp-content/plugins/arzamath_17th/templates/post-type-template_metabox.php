<form method="post" action="options.php">
	<table> 
		<tr valign="top">
			<th class="metabox_label_column">
				<label for="meta_a">Введите текст:</label>
			</th>
			<td>
				<input type="text" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
			</td>
		</tr>               
			<th class="metabox_label_column">
				<label>Виберите вариант(ы):</label>
			</th>
			<td>
				<select name="Meta_B" id="meta_b" size="2" multiple>
					<option id="option_a" name="option_a" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">Вариант A</option>
					<option id="option_b" name="option_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">Вариант B</option>
					<option id="option_c" name="option_c" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">Вариант C</option>
					<option id="option_d" name="option_d" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">Вариант D</option>
				</select>
			</td>
		<tr valign="top">
			<th class="metabox_label_column">
				<label for="meta_c">Загрузить изображение:</label>
			</th>
			<td>
				<form enctype="multipart/form-data" action="../post-types/post_type_template.php" method="POST">
					<input type="hidden" id="img" accept="image/*" />
					<input type="file" id="userimg"  />
					<input type="submit" value="Отправить" />
				</form>
			</td>
		</tr>
	</table>
</form>

