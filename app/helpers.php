<?php
function increment($data, $loop)
{
    return $data->firstItem() + $loop->index;
}
