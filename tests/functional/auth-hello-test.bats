#!/usr/bin/env bats

@test "run auth:hello command without authentication" {
  run terminus auth:logout
  run terminus auth:hello
  [ "$status" -ne 0 ]
}

@test "run auth:hello command after authentication" {
  run terminus auth:login --machine-token="$TERMINUS_TOKEN"
  [[ $output == *"[notice] Logging in via machine token"* ]]
  run terminus auth:hello
  [[ $output == *"Hello, Pantheon CI Bot"* ]]
  [ "$status" -eq 0 ]
}
