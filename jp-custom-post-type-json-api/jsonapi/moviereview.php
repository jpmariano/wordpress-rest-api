<?php
/*
Controller name: Movie Review
Controller description: Movie Review (Custom Post Type ) introspection methods
*/
class JSON_API_Moviereview_Controller {
	public function hello_world() {
		return array('message'=>'hellow world!');
	}
	
	public function get_moviereviews(){
		 $array = array();
		 
		 $args = array('post_type'=>'movie_reviews', 'posts_per_page'=>-1, 'orderby'=>'title', 'order'=>'ASC');

		 $loop = new WP_Query( $args );
		 
		 $counter = 0;
		 
		 while ( $loop->have_posts() ) : $loop->the_post();
		 
			 $array['movie_reviews'][$counter]['title'] = get_the_title();
			 $array['movie_reviews'][$counter]['id'] = get_the_id();
			 
		 $counter++;
		 endwhile;
		
		 return  $array;
	}

}

?>