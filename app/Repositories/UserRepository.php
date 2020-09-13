<?php
class UserRepository
{

    public function getByID();
    public function getNotifiedUsers($query)
    {
        return $query->where('notification', 1)->get();
    };
    public function getByParams();
    public function all($query){
        return $query->all();
    };
    
}