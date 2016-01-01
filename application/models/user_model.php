<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class user_model extends CI_Model
{
 // Get all users
 function get_all_users()
 {
    $this->db->select('*');
    $this->db->from('user');
    $query = $this->db->get();
    return $query->result_array();
 }
 // Get user
 function get_user($user_id)
 {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id', $user_id);
    $this->db->limit(1);
    $query = $this->db->get();
    $result = $query->result_array();
    return isset($result[0]) ? $result[0] : false;
 }
 // Get account by keys
 function get_account_by_keys($user_key, $world_key)
 {
    $this->db->select('*');
    $this->db->from('account');
    $this->db->where('user_key', $user_key);
    $this->db->where('world_key', $world_key);
    $this->db->limit(1);
    $query = $this->db->get();
    $result = $query->result_array();
    return isset($result[0]) ? $result[0] : false;
 }
 // Get account by keys
 function get_account_by_id($account_id)
 {
    $this->db->select('*');
    $this->db->from('account');
    $this->db->where('id', $account_id);
    $this->db->limit(1);
    $query = $this->db->get();
    $result = $query->result_array();
    return isset($result[0]) ? $result[0] : false;
 }
 // Get all worlds
 function get_all_worlds()
 {
    $this->db->select('*');
    $this->db->from('world');
    $query = $this->db->get();
    return $query->result_array();
 }
 // Login
 function login($username, $password)
 {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', password_verify($password, PASSWORD_BCRYPT));
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
        $result = $query->result_array();
        return isset($result[0]) ? $result[0] : false;
    } else {
        return false;
    }
 }
 // Register
 function register($username, $password, $email, $facebook_id)
 {
    $this->db->select('username');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return false;
    } else {
        // Insert user into user
        $data = array(
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'email' => $email,
        'facebook_id' => $facebook_id
        );
        $this->db->insert('user', $data);

        // Find user id
        $this->db->select_max('id');
        $this->db->from('user');
        $this->db->limit(1);
        $query = $this->db->get()->row();
        $user_id = $query->id;
        return $user_id;
    }
 }
 // Create player account
 function create_player_account($user_key, $world_key, $cash, $primary_color)
 {
    // Insert user into user
    $data = array(
    'world_key' => $world_key,
    'user_key' => $user_key,
    'cash' => $cash,
    'primary_color' => $primary_color
    );
    $this->db->insert('account', $data);

    // Find account id
    $this->db->select_max('id');
    $this->db->from('account');
    $this->db->limit(1);
    $query = $this->db->get()->row();
    $account_id = $query->id;
    return $account_id;
 }
 // Update account primary color
 function update_account_primary_color($account_id, $primary_color)
 {
    // Update account
    $data = array(
        'primary_color' => $primary_color
    );
    $this->db->where('id', $account_id);
    $this->db->update('account', $data);

    // Update lands
    $data = array(
        'primary_color' => $primary_color
    );
    $this->db->where('account_key', $account_id);
    $this->db->update('land', $data);
    return true;
 }
 function new_transaction_record($paying_account_key, $recipient_account_key, $transaction, $amount, $world_key, $coord_slug, $details)
 {
    // Insert new transaction log
    $data = array(
    'paying_account_key' => $paying_account_key,
    'recipient_account_key' => $recipient_account_key,
    'transaction' => $transaction,
    'amount' => $amount,
    'world_key' => $world_key,
    'coord_slug' => $coord_slug,
    'details' => $details
    );
    $this->db->insert('transaction_log', $data);
 }

}
?>