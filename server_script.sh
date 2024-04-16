#!/bin/bash

# Load JSON config
config=$(<config.json)

# Extract values
server=$(echo $config | jq -r '.server')
port=$(echo $config | jq -r '.port')
username=$(echo $config | jq -r '.username')
password=$(echo $config | jq -r '.password')

# Output values
echo "Server: $server"
echo "Port: $port"
echo "Username: $username"
echo "Password: $password"
