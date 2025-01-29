#!/bin/bash

# Define the deployment path
DEPLOYPATH=/home/tru645/public_html/

# Copy the built files to the deployment path
cp -R dist/* $DEPLOYPATH
