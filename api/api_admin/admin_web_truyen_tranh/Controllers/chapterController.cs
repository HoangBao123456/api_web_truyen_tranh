using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace admin_web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class chapterController : ControllerBase
    {
        private IchapterBusiness _truyenBusiness;
        public chapterController(IchapterBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("create-chapter")]
        [HttpPost]
        public chapterModel CreateItem([FromBody] chapterModel model)
        {
            _truyenBusiness.Create(model);
            return model;
        }
    }
}
