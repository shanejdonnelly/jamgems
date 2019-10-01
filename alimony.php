<?php 
include('includes/functions.php'); 
do_header('Alimony', 'alimony');

?>
<style>*{font-size: 20px;}</style>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

<script> 
var start = moment('2017-02-01');
var end = moment('2020-02-01');
var now = moment();


var total_time = end.diff(start);
var time_left = end.diff(now);

var time_completed = total_time - time_left;
var percent_completed = Math.round(time_completed/total_time * 100);

var total_payments = 72;
var payments_made = 3; 
var payment_percent = Math.round(payments_made/total_payments * 100);

$(document).ready(function(){
  $('.js-entry').append(percent_completed + '% of time completed'); 
});
</script>

<div class="container">


	<div class="js-entry"><div>
</div>
<?php include('includes/footer.php'); ?>

