<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\MigrationCenterAPI;

class RunningProcess extends \Google\Model
{
  /**
   * @var string[]
   */
  public $attributes;
  /**
   * @var string
   */
  public $cmdline;
  /**
   * @var string
   */
  public $exePath;
  /**
   * @var string
   */
  public $pid;
  /**
   * @var string
   */
  public $user;

  /**
   * @param string[]
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return string[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * @param string
   */
  public function setCmdline($cmdline)
  {
    $this->cmdline = $cmdline;
  }
  /**
   * @return string
   */
  public function getCmdline()
  {
    return $this->cmdline;
  }
  /**
   * @param string
   */
  public function setExePath($exePath)
  {
    $this->exePath = $exePath;
  }
  /**
   * @return string
   */
  public function getExePath()
  {
    return $this->exePath;
  }
  /**
   * @param string
   */
  public function setPid($pid)
  {
    $this->pid = $pid;
  }
  /**
   * @return string
   */
  public function getPid()
  {
    return $this->pid;
  }
  /**
   * @param string
   */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /**
   * @return string
   */
  public function getUser()
  {
    return $this->user;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunningProcess::class, 'Google_Service_MigrationCenterAPI_RunningProcess');
