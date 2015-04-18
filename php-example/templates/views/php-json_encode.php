<?php /* Example from xDebug docs */
class test {
    public $pub = false;
    private $priv = true;
    protected $prot = 42;
}
$t = new test;

$data = array(
    'one' => 'a somewhat long string!',
    'two' => array(
        'two.one' => array(
            'two.one.zero' => 210,
            'two.one.one' => array(
                'two.one.one.zero' => 3.141,
                'two.one.one.one'  => 2.7,
            ),
        ),
    ),
    'three' => $t,
    'four' => range(0, 5),
);

echo json_encode( $data , JSON_PRETTY_PRINT);