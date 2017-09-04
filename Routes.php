<?php

Route::set('about-us',function(){
  // echo "about us";
  AboutUs::CreateView('AboutUs');
});
Route::set('contact-us',function(){
  // echo "contact us";
  ContactUs::CreateView('ContactUs');
});
Route::set('index.php',function(){
  // echo "contact us";
  Index::CreateView('Index');
});

?>
