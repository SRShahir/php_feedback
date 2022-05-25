<?php include 'inc/header.php'; ?>
<?php
$sql='SELECT* FROM feedback';
$result=mysqli_query($conn,$sql);
$feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);

// $feedback = [
//     [
//         'id' => '1',
//         'name' => 'Ashwini Khule',
//         'email' => 'ashwi@gami.com',
//         'body' => 'She is beutiful'
//     ],
//     [
//         'id' => '2',
//         'name' => 'shvani Kale',
//         'email' => 'shivani@gami.com',
//         'body' => 'She is inbuilt attitude'
//     ],
//     [
//         'id' => '3',
//         'name' => 'Ashlesha Khurde',
//         'email' => 'ashlesha@gami.com',
//         'body' => 'She is lier'
//     ],

// ];
?>

<h2>Past Feedback</h2>
<?php if (empty($feedback)) : ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $item['name']; ?>ON <?PHP echo $item['date']; ?>
            </div>

        </div>
    </div>
<?php endforeach; ?>
<?php include 'inc/footer.php'; ?>