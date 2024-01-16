<?php
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [new Account(20489446, 'Checking', -20),
             new Account(20148896, 'Savings', 380),];
$accounteds = [new Account(20489440, 'gneufgneuf', 70),
             new Account(20148890, 'jessove', 600),];

$customer = new Customer('Ivy', 'Stone', 'ivy@eg.link', 'Jup!t3r2684', $accounts);
$customeurt = new Customer('Joe', 'Self', 'joeself@neobank.com', 'S4turnu5!', $accounteds)
?>

<?php include 'includes/header.php'; ?>
<h2>Name: <b><?= $customeurt->getFullName() ?></b></h2>

<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
  </tr>

    <?php foreach ($customeurt->accounts as $account) { ?>
      <tr>
        <td><?= $account->number ?></td>
        <td><?= $account->type ?></td>
          <?php if ($account->getBalance() >= 0) { ?>
        <td class="credit">
            <?php } else { ?>
        <td class="overdrawn">
            <?php } ?>
          $ <?= $account->getBalance() ?></td>
      </tr>
    <?php } ?>

</table>
<?php include 'includes/footer.php'; ?>