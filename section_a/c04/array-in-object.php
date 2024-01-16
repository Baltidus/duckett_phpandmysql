<?php
declare(strict_types = 1);

class Account {
    public    array  $number;
    public    string $type;
    protected float  $balance;

    public function __construct(array $number, string $type, float $balance = 0.00)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

//Create an array to store in the property
$numbers = ['account_number' => (567890000),
            'routing_number' => 876540000,];
$numbers_two = ['account_number' => (326632663266),
                'routing_number' => 111222333,];

//Create an instance of the class and set properties
$account = new Account($numbers, 'Savings', 10.00);
$account_two = new Account($numbers_two, 'Checkings', 200);

?>
<?php include 'includes/header.php'; ?>
<h2><?= $account->type ?> account</h2>
Account <?= $account->number['account_number'] ?><br>
Routing <?= $account->number['routing_number'] ?><br>
<br>
Account <?= $account_two->number['account_number'] ?><br>
Routing <?= $account_two->number['routing_number'] ?>
<?php include 'includes/footer.php'; ?>