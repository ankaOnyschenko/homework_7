<form method="post" action="options.php">
	<table> 
		<tr valign="top">
			<th class="metabox_label_column">
				<label for="meta_1">Введите текст</label>
			</th>
			<td>
				<input type="text" id="meta_1" name="meta_1" value="<?php echo @get_post_meta($post->ID, 'meta_1', true); ?>" />
			</td>
		</tr>               
			<th class="metabox_label_column">
				<label>Виберите вариант(ы):</label>
			</th>
			<td>
				<select multiple>
					<option id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>">Вариант A</option>
					<option id="meta_b" name="meta_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>">Вариант B</option>
					<option id="meta_c" name="meta_c" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>">Вариант C</option>
					<option id="meta_d" name="meta_d" value="<?php echo @get_post_meta($post->ID, 'meta_d', true); ?>">Вариант D</option>
				</select>
			</td>
	</table>
</form>

