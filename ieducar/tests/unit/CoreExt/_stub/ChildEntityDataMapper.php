<?php

/**
 * i-Educar - Sistema de gest�o escolar
 *
 * Copyright (C) 2006  Prefeitura Municipal de Itaja�
 *                     <ctima@itajai.sc.gov.br>
 *
 * Este programa � software livre; voc� pode redistribu�-lo e/ou modific�-lo
 * sob os termos da Licen�a P�blica Geral GNU conforme publicada pela Free
 * Software Foundation; tanto a vers�o 2 da Licen�a, como (a seu crit�rio)
 * qualquer vers�o posterior.
 *
 * Este programa � distribu��do na expectativa de que seja �til, por�m, SEM
 * NENHUMA GARANTIA; nem mesmo a garantia impl��cita de COMERCIABILIDADE OU
 * ADEQUA��O A UMA FINALIDADE ESPEC�FICA. Consulte a Licen�a P�blica Geral
 * do GNU para mais detalhes.
 *
 * Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral do GNU junto
 * com este programa; se n�o, escreva para a Free Software Foundation, Inc., no
 * endere�o 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
 *
 * @author      Eriksen Costa Paix�o <eriksen.paixao_bs@cobra.com.br>
 * @category    i-Educar
 * @license     @@license@@
 * @package     CoreExt_DataMapper
 * @subpackage  UnitTests
 * @since       Arquivo dispon�vel desde a vers�o 1.1.0
 * @version     $Id$
 */

require_once 'CoreExt/DataMapper.php';
require_once 'CoreExt/_stub/ChildEntity.php';

/**
 * CoreExt_ChildEntityDataMapperStub class.
 *
 * @author      Eriksen Costa Paix�o <eriksen.paixao_bs@cobra.com.br>
 * @category    i-Educar
 * @license     @@license@@
 * @package     CoreExt_DataMapper
 * @subpackage  UnitTests
 * @since       Classe dispon�vel desde a vers�o 1.1.0
 * @version     @@package_version@@
 */
class CoreExt_ChildEntityDataMapperStub extends CoreExt_DataMapper
{
  protected $_entityClass = 'CoreExt_ChildEntityStub';
  protected $_tableName   = 'child';
  protected $_tableSchema = '';

  protected $_attributeMap = array(
    'tipoSanguineo' => 'tipo_sanguineo'
  );

  /**
   * Cria a tabela "child" para testes de integra��o.
   *
   * SQL compat�vel com SQLite.
   *
   * @param  clsBancoPdo $db
   * @return mixed Retorna FALSE em caso de erro
   */
  public static function createTable(clsBanco $db)
  {
    $sql = "
CREATE TABLE child(
  id integer primary key,
  nome character varying(100) NOT NULL,
  sexo integer default '1',
  tipo_sanguineo integer default '1',
  peso real default '0'
);";
    return $db->Consulta($sql);
  }
}