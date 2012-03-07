<div id="question">
<h2><?php echo $question['Question']['title']; ?></h2>

<p> Created: <?php echo $question['Question']['created']; ?> <br />
by: <?php echo $question['User']['username']; ?></p>

<p><?php echo $question['Question']['body']; ?></p>
</div>
