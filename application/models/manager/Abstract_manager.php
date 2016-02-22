<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abstract_manager extends CI_Model
{

    public function getTableName()
    {
        return $this->table_name;
    }

    public function getAllProducts()
    {
        $this->db->select();
        $query = $this->db->get($this->getTableName());
        $result = $query->result();

        $models = [];
        foreach ($result as $product)
        {
            $newModel = $this->getTableName().'_model';
            $models[] = new $newModel($product);
        }
        return $models;
    }

    public function getProductById($obj)
    {
        $id = $obj->getId();
        $this->db->select();
        $this->db->where('id', $id);
        $query = $this->db->get($this->getTableName());
        $result = $query->result();

        foreach ($result as $product)
        {
            $newModel = $this->getTableName().'_model';
            $model = new $newModel($product);
        }
        return $model;
    }

    public function addProduct($obj)
    {
        $addData = $this->toArray($obj);
        $this->db->insert($this->getTableName(), $addData);
        return $this->db->insert_id();
    }

    public function deleteProduct($obj)
    {
        $id = $obj->getId();
        $this->db->where('id', $id);
        $this->db->delete($this->getTableName());
    }

    public function toArray($obj)
    {
        $methods = get_class_methods($obj);

        $arr = [];
        foreach ($methods as $method) {
            $get = mb_substr($method, 0, 3);
            if ($get == 'get') {
                if (!is_null($obj->$method())) {
                    $key = str_replace('get', '', $method);
                    $key = mb_strtolower($key);
                    $arr[$key] = $obj->$method();
                }
            }
        }
        return $arr;
    }

//    public function arrayToObject($arr)
//    {
//
//        return $obj;
//    }


}