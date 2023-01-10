<?php

function test($abc) {
    return $abc[0]; //← 0番目の44を返す
}

//   ↓ここには数値で返ってくる
echo test([44]);