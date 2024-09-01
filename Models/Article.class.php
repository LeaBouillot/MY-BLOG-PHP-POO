<?php

class Article extends Database
{

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM article");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
