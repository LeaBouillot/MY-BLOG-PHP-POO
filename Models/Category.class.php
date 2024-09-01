<?php

class Category extends Database
{

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM category");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
