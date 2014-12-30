<?php
/**
 * @author mono voce
 */


// check if the flexible content field has rows of data
function mono_flexible_gridset() {
	
	if( have_rows('content') ):

		// loop through the rows of data
    	while ( have_rows('content') ) : the_row();

        	if( get_row_layout() == 'full_width_column' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll1">';
        				the_sub_field('gridset_1_1');
					echo '</div>';
				echo '</div>';
				
        	elseif( get_row_layout() == 'two_columns' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll2">';
        				the_sub_field('gridset_2_1');
					echo '</div>';
					echo '<div class="gridcoll2">';
						the_sub_field('gridset_2_2');
					echo '</div>';
				echo '</div>';
				
			elseif( get_row_layout() == 'three_columns' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll3">';
        				the_sub_field('gridset_3_1');
					echo '</div>';
					echo '<div class="gridcoll3">';
						the_sub_field('gridset_3_2');
					echo '</div>';
					echo '<div class="gridcoll3">';
						the_sub_field('gridset_3_3');
					echo '</div>';
				echo '</div>';
				
			elseif( get_row_layout() == 'four_columns' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll4">';
        				the_sub_field('gridset_4_1');
					echo '</div>';
					echo '<div class="gridcoll4">';
						the_sub_field('gridset_4_2');
					echo '</div>';
					echo '<div class="gridcoll4">';
						the_sub_field('gridset_4_3');
					echo '</div>';
					echo '<div class="gridcoll4">';
						the_sub_field('gridset_4_4');
					echo '</div>';
				echo '</div>';
				
			elseif( get_row_layout() == 'five_columns' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll5">';
        				the_sub_field('gridset_5_1');
					echo '</div>';
					echo '<div class="gridcoll5">';
						the_sub_field('gridset_5_2');
					echo '</div>';
					echo '<div class="gridcoll5">';
						the_sub_field('gridset_5_3');
					echo '</div>';
					echo '<div class="gridcoll5">';
						the_sub_field('gridset_5_4');
					echo '</div>';
					echo '<div class="gridcoll5">';
						the_sub_field('gridset_5_5');
					echo '</div>';
				echo '</div>';
				
			elseif( get_row_layout() == 'six_columns' ):
				echo '<div class="gridcontainer">';
					echo '<div class="gridcoll6">';
        				the_sub_field('gridset_6_1');
					echo '</div>';
					echo '<div class="gridcoll6">';
						the_sub_field('gridset_6_2');
					echo '</div>';
					echo '<div class="gridcoll6">';
						the_sub_field('gridset_6_3');
					echo '</div>';
					echo '<div class="gridcoll6">';
						the_sub_field('gridset_6_4');
					echo '</div>';
					echo '<div class="gridcoll6">';
						the_sub_field('gridset_6_5');
					echo '</div>';
					echo '<div class="gridcoll6">';
						the_sub_field('gridset_6_6');
					echo '</div>';
				echo '</div>';
				
        	endif;

    	endwhile;

	else :

    // no layouts found

	endif;

}
add_action( 'genesis_entry_content', 'mono_flexible_gridset', 15 );