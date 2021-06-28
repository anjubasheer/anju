
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
// Code By Webdevtrick ( https://webdevtrick.com )
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');
 
   if (e.type === 'keyup') {
 if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
     if( $this.val() === '' ) {
     label.removeClass('active highlight'); 
 } else {
     label.removeClass('highlight');   
 }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
     label.removeClass('highlight'); 
 } 
      else if( $this.val() !== '' ) {
     label.addClass('highlight');
 }
    }
 
});
 
$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');
 
  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});