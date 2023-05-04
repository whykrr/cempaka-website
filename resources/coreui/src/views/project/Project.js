import React from 'react'
import { CButton, CCard, CCardBody, CCardHeader, CCol, CModal, CModalBody, CModalFooter, CModalHeader, CModalTitle, CRow } from '@coreui/react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faPlus } from '@fortawesome/free-solid-svg-icons'
import { SmartTable } from '../../components'
import { contentConstant } from '../../utils/constants'
import { projectConstant } from '../../utils/constants/project-contant'

const Project = (props) => {
  // create state
  // const dispatch = useDispatch()

  // React.useEffect(() => {
  //   dispatch(contentAction.getList())
  // }, [])

  return (
    <>
      <CRow>
        <CCol xs="12">
          <CCard>
            <CCardHeader>
              <strong>List of Project</strong>
            </CCardHeader>
            <CCardBody>
              <CRow className="mb-2">
                <CCol xs="12">{ModalForm()}</CCol>
              </CRow>
              <SmartTable
                setting={[
                  { label: 'Client', item: 'client_detail.name' },
                  { label: 'Nama Project', item: 'name' },
                  { label: 'Desc', item: 'description' },
                  { label: 'Tanggal', item: 'action_date' },
                ]}
                resource={projectConstant.REQUEST_PROJECT}
              ></SmartTable>
            </CCardBody>
          </CCard>
        </CCol>
      </CRow>
    </>
  )
}

const ModalForm = () => {
  const [visible, setVisible] = React.useState(false)

  return (
    <>
      <CButton color="primary" className="mr-1 float-end" onClick={() => setVisible(!visible)}>
        <FontAwesomeIcon icon={faPlus} className="icon" /> Add Content
      </CButton>
      <CModal backdrop="static" className="modal-side right" visible={visible} onClose={() => setVisible(false)}>
        <CModalHeader>
          <CModalTitle>Add Content</CModalTitle>
        </CModalHeader>
        <CModalBody></CModalBody>
        <CModalFooter>
          <CButton color="primary" onClick={() => setVisible(false)}>
            Save
          </CButton>
          <CButton color="secondary" onClick={() => setVisible(false)}>
            Cancel
          </CButton>
        </CModalFooter>
      </CModal>
    </>
  )
}

export default Project
