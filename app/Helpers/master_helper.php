<?php 
    use App\Models\Master_model;
    use \Myth\Auth\Entities\User;

    //expertise
    if (!function_exists('showNavMenuTemplate')) {
        function showNavMenuTemplate($attribute = 'id="ddMenuTmp" name="ddMenuTmp"', $value = '') {
            $model = new Master_model();
            $list_NavMenu=$model->getNavMenuTemplate();

            $no=0;
            foreach ($list_NavMenu as $row) {
                $no = $row['id_menu'];
                $dtg = '';
                $caret = '';

                if($row['menu_href']){
                    $url = site_url().$row['menu_href'];
                }else{
                    $url = '#forms'.$row['id_menu'];
                }

                if($row['has_cild']){
                    $dtg ='data-toggle="collapse"';
                    $caret = '<i class="right fas fa-angle-left"></i>';
                }
                
                echo' <li class="nav-item">';
                echo'    <a href="'.$url.'" class="nav-link">';
                echo'        <i class="nav-icon '.$row['menu_icon'].'"></i>';
                $list_NavSubMenu=$model->getNavSubMenuTemplate($row['id_menu']);
                if(count($list_NavSubMenu)>0){
                    echo'        <p>'.$row['menu_text'].$caret.'</p>';
                    echo'    </a>';
                    echo'<ul class="nav nav-treeview">';
                        foreach ($list_NavSubMenu as $rowSub) {
                            echo'<li class="nav-item">';
                            echo'    <a href="'.site_url().$rowSub['menu_href'].'" class="nav-link">';
                            echo'        <i class="far fa-circle nav-icon"></i>';
                            echo'        <p>'.$rowSub['menu_text'].'</p>';
                            echo'    </a>';
                            echo'</li>';
                        }
                    echo'</ul>';
                }else{
                    echo'        <p>'.$row['menu_text'].'</p>';
                    echo'    </a>';
                }
                echo'</li>';
            }
        }
    }


    if (!function_exists('showDropdownPropinsi')) {
        function showDropdownPropinsi($attribute = 'name="inpRefProponsi" id="inpRefProponsi"', $value = '') {
            $model = new Master_model();
            $list_refkelas=$model->getAllPropinsi();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                echo '<option value="' . $row->id_propinsi . '">' . $row->nama . '</option>';
            }
            echo '</select>';
        }
    }

    if (!function_exists('showDropdownPekerjaan')) {
        function showDropdownPekerjaan($attribute = 'id="pekerjaan" name="pekerjaan"', $value = '') {
            
            $model = new Master_model();
            $list_refkelas=$model->getAllPekerjaan();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                echo '<option value="' . $row->id_pekerjaan . '">' . $row->nama . '</option>';
            }
            echo '</select>';
        }
    }

    if (!function_exists('showDropdownPernikahan')) {
        function showDropdownPernikahan($attribute = 'id="inpPernikahan" name="inpPernikahan"', $value = '') {
            
            $model = new Master_model();
            $list_refkelas=$model->getAllPernikahan();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
            }
            echo '</select>';
        }
    }

    if (!function_exists('showDropdownAssesmentTerapis')) {
        function showDropdownAssesmentTerapis($attribute = 'id="inpRefATerapis" name="inpRefATerapis"', $value = '') {
            if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
                $logged_in = $_SESSION['logged_in'];
            }else{
                $logged_in = '';
            }
            $model = new Master_model();
            $list_refkelas=$model->getAllTerapis();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                if(!empty($logged_in) && ($logged_in ==  $row->id)){
                    echo '<option value="' . $row->id . '" selected>' . $row->nama . '</option>';
                }else{
                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                }
            }
            echo '</select>';
        }
    }

    if (!function_exists('showDropdownFKemampuan')) {
        function showDropdownFKemampuan($attribute = 'name="inpmFKemampuan[]" class="custom-control-input"', $value = '') {
            $model = new Master_model();
            $list_refkelas=$model->getAllFKemampuan();
            $part = ceil(count($list_refkelas)/2);
    
            echo '<div class="form-group row">';
            echo '<div class="col-sm-6">';
                foreach ($list_refkelas as $key=>$row) {
                    if($key == $part){
                        echo '</div>';
                        echo '<div class="col-sm-6">';
                    }
                    echo '<div class="custom-control custom-checkbox">';
                        echo '<input  type="checkbox" name="inpmFKemampuan[]" class="custom-control-input" id="inpmFKemampuan'.$row->id.'" value="'.$row->id.'" />';
                        echo '<label for="inpmFKemampuan'.$row->id.'" class="custom-control-label">'.$row->nama.'</label>';
                    echo '</div>';
                }
            echo '</div>';
            echo '</div>';
        }
    }

    if (!function_exists('showDropdownAnamnesis')) {
        function showDropdownAnamnesis($attribute = ' name="inpmMedisAnamnesis" class="custom-control-input"', $value = '') {
            $model = new Master_model();
            $list_refkelas=$model->getAllAnamnesis();
            $part = ceil(count($list_refkelas)/2);
    
            echo '<div class="form-group row">';
            echo '<div class="col-sm-6">';
                foreach ($list_refkelas as $key=>$row) {
                    if($key == $part){
                        echo '</div>';
                        echo '<div class="col-sm-6">';
                    }
                    echo '<div class="custom-control custom-radio">';
                        echo '<input type="radio" ' . $attribute . ' id="inpmMedisAnamnesis'.$row->id.'" value="'.$row->id.'"/>';
                        echo '<label for="inpmMedisAnamnesis'.$row->id.'" class="custom-control-label">'.$row->nama.'</label>';
                    echo '</div>';
                }
            echo '</div>';
            echo '</div>';
        }
    }

    if (!function_exists('showDropdownPaketMedis')) {
        function showDropdownPaketMedis($attribute = 'id="inpmMedisPaket" name="inpmMedisPaket"', $value = '') {
            $model = new Master_model();
            $list_refkelas=$model->getAllPaket_periksa();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                echo '<option value="' . $row->id . '">' . $row->nama . ' [ Rp. '.number_format($row->harga, '2', ',', '.').' ]</option>';
            }
            echo '</select>';
        }
    }

    if (!function_exists('showDropdownJenisBayar')) {
        function showDropdownJenisBayar($attribute = 'id="inppkJenisbayar" name="inppkJenisbayar"', $value = '') {
            $model = new Master_model();
            $list_refkelas=$model->getAllPaket_jenisbayar();
    
            echo '<select ' . $attribute . '>';
            echo '<option value="">...</option>';
            foreach ($list_refkelas as $row) {
                echo '<option value="'.$row->id.'">' . $row->nama . ' </option>';
            }
            echo '</select>';
        }
    }
    


?>