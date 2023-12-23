<?php

interface MessageIteratorInterface
{
    public function hasNext(): bool;
    public function next();
}