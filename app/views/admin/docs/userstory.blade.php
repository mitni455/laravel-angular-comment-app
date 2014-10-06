<html>

<head>



<script type='text/javascript' src='http://localhost:8888/_PLAYPEN/20_UML/jquery_plantuml/jquery.js'></script>

<script type='text/javascript' src='http://localhost:8888/_PLAYPEN/20_UML/jquery_plantuml/jquery_plantuml.js'></script>



</head>





<body>

<p>Example</p>
<hr>
<img uml="
Bob->Alice : foo
Bob<--Alice : foo
">
<hr>
<img uml="
Bob->Alice : dummy
Bob<--Alice : dummy
">


<h1> Requirement #1: Save as draft / preview article </h1>
<h2> User Story &amp; Use Cases </h2>

<img uml='

@startuml

usecase UserStory <<User Story>> as "As a Admin. 
--
I want to change the status of the blog articles.
--
So that I can QA the quality of the blog content to make sure it is on brand." 

"login as a guest blog authour" as (UseCase_login_as_a_guest_blog_authour)

"add a new dummy article" as (UseCase_add_a_new_dummy_article)

"login as admin" as (UseCase_login_as_admin)

"click blog articles page" as (UseCase_click_blog_articles_page)

"change the status from draft to published" as (UseCase_change_the_status_from_draft_to_published)

"navigate to the blog" as (UseCase_navigate_to_the_blog)

"check that the article is showing" as (UseCase_check_that_the_article_is_showing)

"navigate back to the admin section" as (UseCase_navigate_back_to_the_admin_section)

"delete the blog article" as (UseCase_delete_the_blog_article)



Admin -> (UserStory)
(UserStory)-down->(UseCase_login_as_a_guest_blog_authour)
(UseCase_login_as_a_guest_blog_authour)-down->(UseCase_add_a_new_dummy_article)
(UseCase_add_a_new_dummy_article)-down->(UseCase_login_as_admin)
(UseCase_login_as_admin)-down->(UseCase_click_blog_articles_page)
(UseCase_click_blog_articles_page)-down->(UseCase_change_the_status_from_draft_to_published)
(UseCase_change_the_status_from_draft_to_published)-down->(UseCase_navigate_to_the_blog)
(UseCase_navigate_to_the_blog)-down->(UseCase_check_that_the_article_is_showing)
(UseCase_check_that_the_article_is_showing)-down->(UseCase_navigate_back_to_the_admin_section)
(UseCase_navigate_back_to_the_admin_section)-down->(UseCase_delete_the_blog_article)


@enduml

'>



<hr>
<h2> Sequence Diagram </h2>

<img uml='@startuml

== login as a guest blog authour ==
actor Admin 

Admin -> BlogAuthoursController: login()
BlogAuthoursController -> BlogAuthourModel: loadByEmail()
BlogAuthourModel -> Model: loadWhere()
Model -> Repository: selectFromWhere() 

Model <-- Repository
BlogAuthourModel <-- Model
BlogAuthoursController <-- BlogAuthourModel
Admin <-- BlogAuthoursController 

@enduml'>

<hr>







<?php 

$sex = '

@startuml

usecase UserStory <<User Story>> as "As a Admin. 
--
I want to change the status of the blog articles.
--
So that I can QA the quality of the blog content to make sure it is on brand." 

"login as a guest blog authour" as (UseCase_login_as_a_guest_blog_authour)

"add a new dummy article" as (UseCase_add_a_new_dummy_article)

"login as admin" as (UseCase_login_as_admin)

"click blog articles page" as (UseCase_click_blog_articles_page)

"change the status from draft to published" as (UseCase_change_the_status_from_draft_to_published)

"navigate to the blog" as (UseCase_navigate_to_the_blog)

"check that the article is showing" as (UseCase_check_that_the_article_is_showing)

"navigate back to the admin section" as (UseCase_navigate_back_to_the_admin_section)

"delete the blog article" as (UseCase_delete_the_blog_article)



Admin -> (UserStory)
(UserStory)-down->(UseCase_login_as_a_guest_blog_authour)
(UseCase_login_as_a_guest_blog_authour)-down->(UseCase_add_a_new_dummy_article)
(UseCase_add_a_new_dummy_article)-down->(UseCase_login_as_admin)
(UseCase_login_as_admin)-down->(UseCase_click_blog_articles_page)
(UseCase_click_blog_articles_page)-down->(UseCase_change_the_status_from_draft_to_published)
(UseCase_change_the_status_from_draft_to_published)-down->(UseCase_navigate_to_the_blog)
(UseCase_navigate_to_the_blog)-down->(UseCase_check_that_the_article_is_showing)
(UseCase_check_that_the_article_is_showing)-down->(UseCase_navigate_back_to_the_admin_section)
(UseCase_navigate_back_to_the_admin_section)-down->(UseCase_delete_the_blog_article)


@enduml

';


$img = "<img src=http://www.plantuml.com/plantuml/img/"; 
$img .= encodep($sex); 
$img .= ">";  
echo $img; 
?> 
<?php 

function encodep($text) { 
     $data = utf8_encode($text); 
     $compressed = gzdeflate($data, 9); 
     return encode64($compressed); 
} 

function encode6bit($b) { 
     if ($b < 10) { 
          return chr(48 + $b); 
     } 
     $b -= 10; 
     if ($b < 26) { 
          return chr(65 + $b); 
     } 
     $b -= 26; 
     if ($b < 26) { 
          return chr(97 + $b); 
     } 
     $b -= 26; 
     if ($b == 0) { 
          return '-'; 
     } 
     if ($b == 1) { 
          return '_'; 
     } 
     return '?'; 
} 

function append3bytes($b1, $b2, $b3) { 
     $c1 = $b1 >> 2; 
     $c2 = (($b1 & 0x3) << 4) | ($b2 >> 4); 
     $c3 = (($b2 & 0xF) << 2) | ($b3 >> 6); 
     $c4 = $b3 & 0x3F; 
     $r = ""; 
     $r .= encode6bit($c1 & 0x3F); 
     $r .= encode6bit($c2 & 0x3F); 
     $r .= encode6bit($c3 & 0x3F); 
     $r .= encode6bit($c4 & 0x3F); 
     return $r; 
} 

function encode64($c) { 
     $str = ""; 
     $len = strlen($c); 
     for ($i = 0; $i < $len; $i+=3) { 
            if ($i+2==$len) { 
                  $str .= append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)), 0); 
            } else if ($i+1==$len) { 
                  $str .= append3bytes(ord(substr($c, $i, 1)), 0, 0); 
            } else { 
                  $str .= append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)), ord(substr($c, $i+2, 1))); 
            } 
     } 
     return $str; 
} 
?> 


</body>

</html>























































