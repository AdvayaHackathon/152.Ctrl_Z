import streamlit as st
from gtts import gTTS
from io import BytesIO
import google.generativeai as genai

# ✅ Use Free Experimental Gemini model
genai.configure(api_key="AIzaSyDEd8wGJ-gF_m7PKGKjo9X8Z1V5kPY3IRY")
model = genai.GenerativeModel("models/gemini-2.5-pro-exp-03-25")  # Free-tier model

# 🌍 Supported languages
languages = {
    "English": "en",
    "Tamil - தமிழ்": "ta",
    "Hindi - हिंदी": "hi",
    "French - Français": "fr",
    "Spanish - Español": "es",
    "German - Deutsch": "de",
    "Chinese - 中文": "zh-cn",
    "Arabic - العربية": "ar"
}

# Streamlit App
st.set_page_config(page_title="TTS", layout="centered")
st.title("Text-to-Speech")

selected_lang = st.selectbox("🌐 Choose output language:", list(languages.keys()))
input_text = st.text_area("✍️ Enter text (any language):")

if st.button("🔊 Translate & Speak"):
    if not input_text.strip():
        st.warning("⚠️ Please enter some text.")
    else:
        lang_code = languages[selected_lang]

        # Step 1: Translate using free Gemini model
        with st.spinner("Translating using Gemini..."):
            try:
                prompt = f"Translate only the given text to {selected_lang} without any explanation. Do not include examples or extra details. Only return the translated text:\n\n{input_text}"


                translated_text = model.generate_content(prompt).text.strip()
                st.markdown(f"📝 **Translated Text:** `{translated_text}`")
            except Exception as e:
                st.error(f"❌ Translation failed: {e}")
                st.stop()

        # Step 2: Convert translated text to audio
        try:
            tts = gTTS(translated_text, lang=lang_code)
            audio_fp = BytesIO()
            tts.write_to_fp(audio_fp)
            audio_fp.seek(0)

            st.audio(audio_fp, format="audio/mp3")
            st.download_button("⬇️ Download Audio", audio_fp, file_name="speech.mp3", mime="audio/mpeg")
            st.success("✅ Done! Audio ready.")
        except Exception as e:
            st.error(f"❌ Audio generation failed: {e}")
