<?php
class Iban
{
    public $iban;
    public static function getRecordByIban($iban)
    {
        $data = json_decode(file_get_contents(DIR . 'inc/clients.json', 1), true);
        foreach ($data as $record) {
            if (in_array($iban, $record)) {
                $result=$record;
                $ownerName = $record['name'];
                $ownerSurname = $record['surname'];
                $accountNumber = $record['IBAN'];
                $balance = number_format($record['balance'], 2);
            }
        }
        return $result;
    }
    public function createValidIBAN()
    {
        $iban = 'LT';
        foreach (range(1, 18) as $_) {
            $digit = rand(0, 9);
            $iban .= "$digit";
        }

        if (!file_exists(DIR . 'inc/iban.json')) {
            file_put_contents(DIR . 'inc/iban.json', json_encode([]));
        }
        $ibanData = json_decode(file_get_contents(DIR . 'inc/iban.json', 1));
        if (!in_array($iban, $ibanData)) {
            return $this->iban = $iban;
        } else {
            return createValidIBAN();
        }
    }
}
