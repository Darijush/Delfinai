<?php

namespace App\DB;

class Json implements DataBase
{
    private $data,$file;
    static private $obj;
    
    static public function connect($file = 'data')
    {
        return self::$obj ?? self::$obj = new self($file);
    }
    private function __construct($file)
    {   $this->file = $file;
        if (!file_exists(DIR . 'App/DB/'.$this->file.'.json')) {
            file_put_contents(DIR . 'App/DB/'.$this->file.'.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'App/DB/'.$this->file.'.json'), 1);
    }
    private function getId(): int
    {
        if (!file_exists(DIR . 'App/DB/'.$this->file.'_id.json')) {
            file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode(0));
        }
        $id = json_decode(file_get_contents(DIR . 'App/DB/'.$this->file.'_id.json'));
        $id++;
        file_put_contents(DIR . 'App/DB/'.$this->file.'_id.json', json_encode($id));
        return $id;
    }
    public function __destruct()
    {
        file_put_contents(DIR . 'App/DB/'.$this->file.'.json', json_encode($this->data));
    }
    public function create(array $clientData): void
    {
        $clientData['id'] = $this->getId();
        $this->data[] = $clientData;
    }
    public function update(int $clientId, array $clientData): void
    {
        foreach ($this->data as &$client) {
            if ($client['id'] == $clientId) {
                $clientData['id'] = $clientId;
                $client = $clientData;
                break;
            }
        }
    }
    public function delete(int $clientId): void
    {
        foreach ($this->data as $index => &$client) {
            if ($client['id'] == $clientId) {
                unset($this->data[$index]);
                $this->data = array_values($this->data);
                break;
            }
        }
    }
    public function show(int $clientId): array
    {
        foreach ($this->data as $client) {
            if ($client['id'] == $clientId) {
                return $client;
            }
        }
    }
    public function showAll(): array
    {
        return $this->data;
    }
}
