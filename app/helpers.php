<?php

use App\Models\Mentor;

function mentorIdExist($id)
{
  return Mentor::where('id', $id)->exists();
}

function generateMentorID()
{
  $number = mt_rand(1000000000, 9999999999);

  if (mentorIdExist($number)) {
    return generateMentorID();
  }

  return $number;
}

$data_sementara_calon_mentor;

function saveCalonMentorData($data)
{
  global $data_sementara_calon_mentor;
  $data_sementara_calon_mentor = $data;
}

function getCalonMentorData()
{
  global $data_sementara_calon_mentor;
  return $data_sementara_calon_mentor;
}