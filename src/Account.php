<?php
namespace Parasut;

class Account extends Base
{
    public function create($data)
    {
        return $this->client->request(
            'contacts',
            $data,
            'POST'
        );
    }
    
    public function showall($data = [])
    {
        return $this->client->request(
            'contacts/',
            $data,
            'GET'
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'GET'
        );
    }

    public function update($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'PUT'
        );
    }
}
